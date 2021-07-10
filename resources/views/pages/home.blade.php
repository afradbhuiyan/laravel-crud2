@extends('layouts.app')

@section('page_title','A laravel8 CRUD')

@section('content')
    <section class="main-wrap__sec home-sec">
        <div class="home-sec__container container">
            <div class="home-sec__row row">
                <div class="home-sec__col col-12 col-md-10 col-lg-8">
                
                    <h1 class="home-sec__title">
                        Laravel 8 CRUD Application
                    </h1>

                    <div class="home-sec__topBar">
                        <h5 class="home-sec__subTitle">
                            All students
                        </h5>

                        <a class="btn btn--primary btn--create" href="{{ route('students.create') }}">
                            <i class="btn__icon fas fa-plus"></i>
                            <span class="btn__txt">Create</span>
                        </a>
                    </div>

                    @if(!empty($students->all()))
                        <div class="home-sec__table">
                            <table class="table table--homeSec">
                                <thead class="table__thead">
                                    <tr class="table__tr table__tr--thead">
                                        <th class="table__th">#ID</th>
                                        <th class="table__th">Name</th>
                                        <th class="table__th">Age</th>
                                        <th class="table__th">Gender</th>
                                        <th class="table__th">City</th>
                                        <th class="table__th">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="table__tbody">
                                    @foreach ($students as $student)
                                        <tr class="table__tr table__tr--tbody">
                                            <td class="table__td table__td--id">
                                                <div class="table__td-wrap">
                                                    {{ $student->id }}
                                                </div>
                                            </td>
                                            <td class="table__td table__td--name">
                                                <div class="table__td-wrap">
                                                    {{ $student->name }}
                                                </div>
                                            </td>
                                            <td class="table__td table__td--age">
                                                <div class="table__td-wrap">
                                                    {{ $student->age }}
                                                </div>
                                            </td>
                                            <td class="table__td table__td--gender">
                                                <div class="table__td-wrap">
                                                    {{ $student->gender }}
                                                </div>
                                            </td>
                                            <td class="table__td table__td--city">
                                                <div class="table__td-wrap">
                                                    {{ $student->city }}
                                                </div>
                                            </td>
                                            <td class="table__td table__td--action">
                                                <div class="table__td-wrap">
                                                    <a class="btn btn--icon btn--edit" href="{{ route('students.edit',['id'=>$student->id]) }}">
                                                        <i class="btn__icon fas fa-edit"></i>
                                                    </a>

                                                    <a class="btn btn--icon btn--delete" href="{{ route('students.destroy', ['id'=>$student->id]) }}">
                                                        <i class="btn__icon fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>
                            <h4>No records Found</h4>
                        </div>
                    @endif                   
                </div>
            </div>
        </div>
    </section>
@endsection