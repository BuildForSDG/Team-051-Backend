<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\User;

class UserApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @group api
     * @group test_user
     * @group test_create_user
     */
    public function test_create_user() : void
    {
        $user = factory(User::class)->make()->toArray();

        $user['password'] = 'test123456';

        $this->response = $this->json(
            'POST',
            '/api/users',
            $user
        );

        unset($user['password']);

        $this->assertApiResponse($user);
    }

//    /**
//     * @test
//     */
//    public function test_read_user()
//    {
//        $user = factory(User::class)->create();
//
//        $this->response = $this->json(
//            'GET',
//            '/api/users/'.$user->id
//        );
//
//        $this->assertApiResponse($user->toArray());
//    }
//
//    /**
//     * @test
//     */
//    public function test_update_user()
//    {
//        $user = factory(User::class)->create();
//        $editedUser = factory(User::class)->make()->toArray();
//
//        $this->response = $this->json(
//            'PUT',
//            '/api/users/'.$user->id,
//            $editedUser
//        );
//
//        $this->assertApiResponse($editedUser);
//    }
//
//    /**
//     * @test
//     */
//    public function test_delete_user()
//    {
//        $user = factory(User::class)->create();
//
//        $this->response = $this->json(
//            'DELETE',
//             '/api/users/'.$user->id
//         );
//
//        $this->assertApiSuccess();
//        $this->response = $this->json(
//            'GET',
//            '/api/users/'.$user->id
//        );
//
//        $this->response->assertStatus(404);
//    }
}
