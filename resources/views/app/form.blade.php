@extends('layout')

@section('title', 'Job Application Form')

@section('page')
<div class="card mb-4">
    <div class="card-body p-4">
        <div class="row">
            <div class="col-auto">
                <i class="fa fa-circle-info text-primary"></i>
            </div>
            <div class="col">
                You are applying for a position at <strong>{{ $company }}</strong>
            </div>
        </div>
    </div>
</div>
<form id="application" method="POST" action="{{ route('app.apply') }}" onsubmit="return confirm('Submit your application?')">
    @csrf
    <input type="hidden" name="company" value="{{ $company }}">
    <div class="mb-4">
        <h5 class="m-0">Basic Information</h5>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="name" class="form-label">Name <x-required /></label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                <x-error id="name" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label class="form-label">Gender <x-required /></label>
                <div>
                    @foreach (['Male', 'Female'] as $gender)
                        <div class="form-check form-check-inline">
                            <input id="gender-{{ str($gender)->kebab() }}" class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" value="{{ $gender }}" @checked(old('gender') === $gender)>
                            <label for="gender-{{ str($gender)->kebab() }}" class="form-check-label">{{ $gender }}</label>
                        </div>
                    @endforeach
                    </div>
                <x-error id="gender" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="email" class="form-label">E-mail <x-required /></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail address">
                </div>
                <x-error id="email" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="phone" class="form-label">Phone <x-required /></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number">
                </div>
                <x-error id="phone" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="address" class="form-label">Address <x-required /></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-home"></i></span>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Enter your address line">
                </div>
                <x-error id="address" />
            </div>
        </div>
    </div>
    <div class="mb-4">
        <h5 class="m-0">Application Data</h5>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="position" class="form-label">Position <x-required /></label>
                <select id="position" class="form-select @error('position') is-invalid @enderror" name="position">
                    <option disabled @selected(empty(old('position')))>-- Choose position --</option>
                    @foreach (['Frontend Developer', 'Backend Developer', 'Fullstack Developer', 'UI/UX Designer', 'Project Manager'] as $position)
                        <option value="{{ $position }}" @selected(old('position') === $position)>{{ $position }}</option>
                    @endforeach
                </select>
                <x-error id="position" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="salary-expectation" class="form-label">Expected Salary <x-required /></label>
                <div class="input-group">
                    <span class="input-group-text">IDR</span>
                    <input id="salary-expectation" type="number" class="form-control @error('salary_expectation') is-invalid @enderror" name="salary_expectation" value="{{ old('salary_expectation') }}" placeholder="Enter your salary expectation">
                </div>
                <x-error id="salary_expectation" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="experience" class="form-label">Experience <x-required /></label>
                <div class="input-group">
                    <input id="experience" type="number" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" placeholder="How many years of professional experience?">
                    <span class="input-group-text">years</span>
                </div>
                <x-error id="experience" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="curriculum-vitae" class="form-label">Curriculum Vitae (CV) <x-required /></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                    <input id="curriculum-vitae" type="text" class="form-control @error('curriculum_vitae') is-invalid @enderror" name="curriculum_vitae" value="{{ old('curriculum_vitae') }}" placeholder="Enter link to your CV">
                </div>
                <x-error id="curriculum_vitae" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <label for="portfolio" class="form-label">Portfolio</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                    <input id="portfolio" type="text" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio" value="{{ old('portfolio') }}" placeholder="Enter link to your portfolio">
                </div>
                <x-error id="portfolio" />
            </div>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane me-2"></i> Submit</button>
    </div>
</form>
@endsection
