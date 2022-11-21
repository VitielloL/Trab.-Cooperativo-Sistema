<?php

namespace App\Profile\Http\Controllers;

use App\Base\Http\Controllers\Controller;
use App\Profile\Models\Profile;
use App\Profile\Models\ProfileRepositoryInterface;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private ProfileRepositoryInterface $profileRepository;

    public function __construct
    (
        ProfileRepositoryInterface $profileRepository
    )
    {
        $this->profileRepository = $profileRepository;
    }

    public function index()
    {
        $idUser = auth()->user()->id;
        $profileEntity = $this->profileRepository->findByUserId($idUser);

        $baseInfo = array(
            'profileEntity' => $profileEntity
        );

        return view('profile.profile', $baseInfo);
    }

    public function store(Request $request)
    {
        $idUser = auth()->user()->id;
        $newValues = $request->except('_token');
        $newValues['user_id'] = $idUser;

        $newProperty = new Profile($newValues);
        $newProperty->save();

        return redirect()->route('profile');
    }

    public function update(Request $request)
    {
        $idUser = auth()->user()->id;
        $newValues = $request->except('_token');

        $profileEntity = $this->profileRepository->findByUserId($idUser);
        $profileEntity->update($newValues);

        return redirect()->route('profile');
    }
}
