<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ProfileHistory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileHistoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_profile_histories_list()
    {
        $profileHistories = ProfileHistory::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.profile-histories.index'));

        $response->assertOk()->assertSee($profileHistories[0]->gender);
    }

    /**
     * @test
     */
    public function it_stores_the_profile_history()
    {
        $data = ProfileHistory::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.profile-histories.store'),
            $data
        );

        unset($data['profile_id']);

        $this->assertDatabaseHas('profile_histories', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_profile_history()
    {
        $profileHistory = ProfileHistory::factory()->create();

        $data = [
            'gender' => $this->faker->text(20),
            'phone_number' => $this->faker->phoneNumber,
            'blood_group' => $this->faker->text(5),
            'no_ktp' => $this->faker->text(20),
            'no_npwp' => $this->faker->text(20),
            'address_ktp' => $this->faker->text,
            'address_domisili' => $this->faker->text,
            'status_domisili' => $this->faker->text,
            'user_id' => $this->faker->randomNumber,
        ];

        $response = $this->putJson(
            route('api.profile-histories.update', $profileHistory),
            $data
        );

        unset($data['profile_id']);

        $data['id'] = $profileHistory->id;

        $this->assertDatabaseHas('profile_histories', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_profile_history()
    {
        $profileHistory = ProfileHistory::factory()->create();

        $response = $this->deleteJson(
            route('api.profile-histories.destroy', $profileHistory)
        );

        $this->assertDeleted($profileHistory);

        $response->assertNoContent();
    }
}
