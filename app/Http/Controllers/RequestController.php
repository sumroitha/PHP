<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    //
    public function getAllPost(){
        //$response = HTTP::get("http://10.10.112.11:9010/api/list");
        $response = HTTP::get("http://localhost:8001/api/list");
        return $response->json();
    }

    public function getSinglePost($id){
        //$response = HTTP::get("http://10.10.112.11:9010/api/list");
        $response = HTTP::get("http://localhost:8001/api/list/".$id);
        return $response->json();
    }

    public function addPost(){
        $post = HTTP::post("http://localhost:8001/api/add", [
            'name'=>'Apple Watch',
            'member_id'=>'3'
        ]);
        return $post->json();
    }

    public function updatePost(){
        $post = HTTP::put("http://localhost:8001/api/update", [
            'name'=>'Updated device',
            'member_id'=>'1',
            'id'=>'1'
        ]);
        return $post->json();
    }

    public function deletePost($id){
        $post = HTTP::delete("http://localhost:8001/api/delete/".$id);
        return $post->json();
    }

    public function getRequestCBS(){
        $response = Http::withHeaders([
            'x-kont-appkey'=>'6000000514984255',
            'membx-kont-token'=>'',
            'x-kont-locale'=>'zh',
            'x-kont-channel'=>'PMBK',
            'channel'=>'666666',
            'x-kont-key'=>'PbvZn0T0K0RLMNmAY4hU+DCw06HdvdHMts2dyEVQ0Ii0b4XOJ3/asljqlJ9QvpFSw/vpsbw0LvKKQhLqSHowZtExPs9BRHdzipcM4RfxzsI72I17Q8g+Y4ulDOoqsxd7csapqy5NgVy+tMz0UHhCp0ubqTRW+W/K4/BikcozgLM=',
            'x-kont-iv'=>'EmvZ9qk6hUttXC4Miwk+BuvQHww15uYQJJVoDhKqtBNZN5HrO+G4q3a8r96gae4nqU1/fr3oy4ljsELplk5y9E8k/3lfSm7h+H72luj2dIDz04KqBB0srSfY6dq9dIo6k6b3hTdOdCpsLvydZpIw7jqCn4QmOykdFinHVwppY1Q=',
            'x-kont-channel'=>'PMBK',
            'x-kont-sign'=>'',
            'Content-Type'=>'application/json'
        ])->get('https://m-uat.orientalbank.com.kh:5040/svip/platform/publicCode/getPublicCodeByType', [
            'data'=>'Fm6X6TZs1YFViZBRiwKc/R8//FsqAz5+evjZpHS/rt+Yt6CEfZ/2N7kw+MmwnqSaxhZIGYg0lHKLkbC/UvhtPHIauhcRf1hx/PApmu5Jpu4FbZtXiRkF3K0urJwlZKpAZVAByu+5Ca+JyDleWQPJGCQZeBCtfhKIVNI1l5/5xh5cPu0IlCYTDOSKveF7T1xEdfSCfYNrg3l5Qz59BC/j1iB48eBNZnO3dJxsYcHYSOHH9y3CAFPiJn6nOG+kOeBdBimFkHXmK297bo5Q1mzkxx9+XOSKTbVhyETioBCcDPWnpXr4X7oo9DJKVgnM6vEyN6cRK7PejEb3LOZ5iwzDTg=='
        ]);
        return $response->json();
    }
}
