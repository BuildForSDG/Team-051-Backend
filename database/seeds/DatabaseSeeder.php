<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AccidentsTableSeeder::class);
        $this->call(BreakdownsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(UserSettingsTableSeeder::class);
        $this->call(UserNotificationsTableSeeder::class);
        $this->call(HospitalNotificationsTableSeeder::class);
        $this->call(PoliceStationNotificationsTableSeeder::class);
        $this->call(TowerNotificationsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(LgasTableSeeder::class);
        $this->call(PoliceStationsTableSeeder::class);
        $this->call(SafetyForcesTableSeeder::class);
        $this->call(HospitalsTableSeeder::class);
        $this->call(TowersTableSeeder::class);
        $this->call(PickupsTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
        $this->call(RoadsTableSeeder::class);
        $this->call(IncidentsTableSeeder::class);
        $this->call(TripsTableSeeder::class);
        $this->call(RobberiesTableSeeder::class);
        $this->call(KidnappingsTableSeeder::class);
        $this->call(ResponsesTableSeeder::class);
        $this->call(HospitalResponsesTableSeeder::class);
        $this->call(PoliceResponsesTableSeeder::class);
        $this->call(TowResponsesTableSeeder::class);
        $this->call(PickupResponsesTableSeeder::class);
        $this->call(RoadSafetyResponsesTableSeeder::class);
    }
}
