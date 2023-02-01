@extends('layouts.app')

@section('content')
    @if($exercises)
        <div class="container">
            <div class="row justify-content-center">
                <table class="table">
                    <thead class="table-info">
                    <td>Muscle</td>
                    <td>Training Times</td>
                    <td>Date</td>
                    </thead>
                    @foreach($exercises as $exercise)
                        <tbody class="body">
                        @if($exercise->muscle_id == 1)
                            <td>Abs</td>
                        @elseif($exercise->muscle_id == 2)
                            <td>Calves</td>
                        @elseif($exercise->muscle_id == 3)
                            <td>Chest</td>
                        @elseif($exercise->muscle_id == 4)
                            <td>Forearms</td>
                        @elseif($exercise->muscle_id == 5)
                            <td>Adductors</td>
                        @elseif($exercise->muscle_id == 6)
                            <td>Biceps</td>
                        @elseif($exercise->muscle_id == 7)
                            <td>Triceps</td>
                        @elseif($exercise->muscle_id == 8)
                            <td>Trapezius</td>
                        @else
                            <td>Quads</td>
                        @endif
                        <td>{{$exercise->times}}</td>
                        <td>{{$exercise->created_at}}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
@endsection
