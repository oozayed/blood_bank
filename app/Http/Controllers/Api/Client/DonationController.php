<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\DonationRequest;
use App\Http\Resources\Api\Client\DonationResource;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\DonationRequest as DonationModel;

class DonationController extends Controller
{
    use ResponseTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $donations = DonationModel::query()
            ->with(['city', 'bloodType'])
            ->filter($request)
            ->get();
        return $this->data('this is all donation requests', DonationResource::collection($donations));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(DonationRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $data['client_id'] = auth()->user()->id;
        DonationModel::query()->create($data);
        return $this->success('donation request created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {

        $donation = DonationModel::query()->find($id);
        if ($donation) {
            return $this->data('donation request', $donation);
        } else {
            return $this->error('donation request not found');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(DonationRequest $request, string $id)
    {
        $data = $request->validated();
        $donation = DonationModel::query()->find($id);
        if ($donation) {
            $donation->update($data);
            return $this->success('donation request updated successfully');
        } else {
            return $this->error('donation request not found');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donation = DonationModel::query()->find($id);
        if ($donation) {
            $donation->delete();
            return $this->success('donation request deleted successfully');
        } else {
            return $this->error('donation request not found');
        }
    }
}
