<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Building;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $users = [];
        $users = User::get();

        return response()->json(['data' => UserResource::collection($users)]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'unit_size' => $request->input('unit_size'),
            'population' => $request->input('population'),
            'building_id' => $request->input('building_id'),
            'username' => $request->input('username'),
            'password' => $request->input('password', '123456'),
        ]);

        $building = Building::find($user->building_id);
        $building->total_area += $user->unit_size;
        $building->total_population += $user->population;
        $building->save();

        return response()->json(['data' => new UserResource($user)]);
    }


    /**
     * @param User $user
     * @param Request $request
     * @return JsonResponse
     */
    public function update(User $user, Request $request): JsonResponse
    {
        if ($user->unit_size !== $request->unit_size) {
            $building = Building::find($user->building_id);

            $building->total_area -= $user->unit_size;
            $building->total_area += $request->unit_size;

            $building->total_population -= $user->population;
            $building->total_population += $request->population;

            $building->save();
        }

        $user->update($request->only(['name', 'floor', 'unit_size', 'population', 'username']));
        return response()->json(['data' => new UserResource($user)]);
    }


    /**
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $building = Building::find($user->building_id);
        $building->total_area -= $user->unit_size;
        $building->total_population -= $user->population;
        $building->save();

        $user->delete();
        return response()->json(['data' => new UserResource($user)]);
    }
}
