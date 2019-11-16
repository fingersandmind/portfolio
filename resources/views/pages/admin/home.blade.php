@extends('layouts.admin')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Information</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Update your Data</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <form  method="POST" action="{{ route('data.update') }}" class="card">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Your Profile Data</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">

                                <div class="form-group">
                                    <label class="form-label">About me </label>
                                    <textarea class="form-control" name="about" rows="6" 
                                    placeholder="text here..">{{ old('about') ?? $profile->about }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact #</label>
                                    <div class="row gutters-sm">
                                        <div class="col">
                                            <input type="text" class="form-control" name="phone" 
                                            placeholder="Search for..." value="{{ old('phone') ?? $profile->phone }}">
                                        </div>
                                        <span class="col-auto align-self-center">
                                            <span class="form-help" data-toggle="popover" data-placement="top"
                                            data-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
                                            <p class='mb-0'><a href='#'>USP ZIP codes lookup tools</a></p>
                                            ">?</span>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address" rows="6" 
                                    placeholder="text here..">{{ old('address') ?? $profile->address }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Website Url</label>
                                    <input type="text" class="form-control" name="website" 
                                    placeholder="Name" value="{{ old('website') ?? $profile->website }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" 
                                    placeholder="Name" value="{{ old('facebook') ?? $profile->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" 
                                    placeholder="Name" value="{{ old('instagram') ?? $profile->instagram }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Other Info</label>
                                    <input type="text" class="form-control" name="other_info" 
                                    placeholder="Name" value="{{ old('other_info') ?? $profile->other_info }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Other Info 2</label>
                                    <input type="text" class="form-control" name="other_info2" 
                                    placeholder="Name" value="{{ old('other_info2') ?? $profile->other_info2 }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <button type="submit" name="action" value="profile" class="btn btn-primary ml-auto">Update data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection