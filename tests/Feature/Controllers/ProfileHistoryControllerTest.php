<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\ProfileHistory;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileHistoryControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_profile_histories()
    {
        $profileHistories = ProfileHistory::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('profile-histories.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.profile_histories.index')
            ->assertViewHas('profileHistories');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_profile_history()
    {
        $response = $this->get(route('profile-histories.create'));

        $response->assertOk()->assertViewIs('app.profile_histories.create');
    }

    /**
     * @test
     */
    public function it_stores_the_profile_history()
    {
        $data = ProfileHistory::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('profile-histories.store'), $data);

        unset($data['profile_id']);

        $this->assertDatabaseHas('profile_histories', $data);

        $profileHistory = ProfileHistory::latest('id')->first();

        $response->assertRedirect(
            route('profile-histories.edit', $profileHistory)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_profile_history()
    {
        $profileHistory = ProfileHistory::factory()->create();

        $response = $this->get(
            route('profile-histories.show', $profileHistory)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.profile_histories.show')
            ->assertViewHas('profileHistory');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_profile_history()
    {
        $profileHistory = ProfileHistory::factory()->create();

        $response = $this->get(
            route('profile-histories.edit', $profileHistory)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.profile_histories.edit')
            ->assertViewHas('profileHistory');
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

        $response = $this->put(
            route('profile-histories.update', $profileHistory),
            $data
        );

        unset($data['profile_id']);

        $data['id'] = $profileHistory->id;

        $this->assertDatabaseHas('profile_histories', $data);

        $response->assertRedirect(
            route('profile-histories.edit', $profileHistory)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_profile_history()
    {
        $profileHistory = ProfileHistory::factory()->create();

        $response = $this->delete(
            route('profile-histories.destroy', $profileHistory)
        );

        $response->assertRedirect(route('profile-histories.index'));

        $this->assertDeleted($profileHistory);
    }
}
