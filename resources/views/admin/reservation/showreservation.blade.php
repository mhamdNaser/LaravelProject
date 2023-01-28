@extends('layout.navbar')
@section('title')
Reservations
@endsection
@section('Reservation_active')
active
@endsection
@section('container')
    <main class="m-2 p-8 w-full">
        <div>
            @if (session()->has('danger'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                    role="alert">
                    <span class="font-medium">{{ session()->get('danger') }}!</span>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <span class="font-medium">{{ session()->get('success') }}!</span>
                </div>
            @endif
            @if (session()->has('warning'))
                <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                    role="alert">
                    <span class="font-medium">{{ session()->get('warning') }}!</span>
                </div>
            @endif
        </div>
    </main>
    <a href="{{route("Reservation.create")}}">
        ADD
    </a>
    <table class="table mb-0">
        <thead>
            <tr>
                <td>Service</td>
                <td>User</td>
                <td>Location</td>
                <td>Reservation Time</td>
                <td>Total_Price</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($Reservations as $item)
            <tr>
                <td>{{$item["Service"]}}</td>
                <td>{{$item["User"]}}</td>
                <td>{{$item["location"]}}</td>
                <td>{{$item["Time"]}}</td>
                <td>{{$item["Total_Price"]}}</td>
                <td>{{$item["Status"]}}</td>
                <td>
                <a href="{{route('Reservation.edit',$item["id"])}}"><button class="btn btn-success">Confirm</button></a>
                <form action="{{route('Reservation.destroy',$item["id"])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
