@extends('layout')

@section('title', 'Application Submitted')

@section('page')
<div class="card mb-4">
    <div class="card-body p-4">
        <div class="row">
            <div class="col-auto">
                <i class="fa fa-circle-check text-success"></i>
            </div>
            <div class="col">
                Your application as a <strong>{{ $application['position'] }}</strong> at <strong>{{ $application['company'] }}</strong> has been submitted
            </div>
        </div>
    </div>
</div>
<div>
    <h3>Application Details</h3>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Name</th>
                <td>:</td>
                <td>{{ $application['name'] }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td>{{ $application['gender'] }}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>:</td>
                <td>{{ $application['email'] }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>:</td>
                <td>{{ $application['phone'] }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>:</td>
                <td>{{ $application['address'] }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>:</td>
                <td>{{ $application['position'] }}</td>
            </tr>
            <tr>
                <th>Salary Expectation</th>
                <td>:</td>
                <td>IDR {{ $application['salary_expectation'] }}</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>:</td>
                <td>{{ $application['experience'] }} years</td>
            </tr>
            <tr>
                <th>Curriculum Vitae</th>
                <td>:</td>
                <td><a href="{{ $application['curriculum_vitae'] }}" target="_blank">{{ $application['curriculum_vitae'] }}</a></td>
            </tr>
            <tr>
                <th>Portfolio</th>
                <td>:</td>
                <td>
                    @isset($application['portfolio'])
                        <a href="{{ $application['portfolio'] }}" target="_blank">{{ $application['portfolio'] }}</a>
                    @else
                        -
                    @endisset
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
