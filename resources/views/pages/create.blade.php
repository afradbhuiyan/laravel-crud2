@extends('layouts.app')

@section('page_title','A laravel8 CRUD')

@section('content')
    <section class="main-wrap__sec create-sec">
        <div class="create-sec__container container">
            <div class="create-sec__row row">
                <div class="create-sec__col col-12 col-md-8 col-lg-6">
                
                    <h1 class="create-sec__title">
                        Laravel 8 CRUD Application
                    </h1>

                    <div class="create-sec__topBar">
                        <h5 class="create-sec__subTitle">
                            Add a student
                        </h5>

                        <a class="btn btn--primary btn--create" href="{{ route('home') }}">
                            <i class="btn__icon fas fa-home"></i>
                            <span class="btn__txt">Back to the Home</span>
                        </a>
                    </div>

                    <div class="create-sec__form">
                        <form class="form form--create" action="{{ route('students.store') }}" method="POST">
                            <div class="form__row form__row--name">
                                <div class="form__field">
                                    @csrf
                                    <input class="form__input" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                                    
                                    @error('name')
                                        <div class="form__msg form__msg--error">
                                            <i class="form__msg-icon fas fa-exclamation-circle"></i>
                                            <span class="form__msg-txt">{{ $message }}</span>
                                        </div>
                                    @enderror
                                  
                                </div>
                            </div>

                            <div class="form__row form__row--age">
                                <div class="form__field">
                                    <input class="form__input form__input--text" type="text" name="age" placeholder="Age" value="{{ old('age') }}">

                                    @error('age')
                                        <div class="form__msg form__msg--error">
                                            <i class="form__msg-icon fas fa-exclamation-circle"></i>
                                            <span class="form__msg-txt">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form__row form__row--gender">
                                <div class="form__field">
                                    <div class="form__select">
                                        <select class="form__input form__input--select" name="gender">
                                            <option value="">Select Your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    @error('gender')
                                        <div class="form__msg form__msg--error">
                                            <i class="form__msg-icon fas fa-exclamation-circle"></i>
                                            <span class="form__msg-txt">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                                                     
                            <div class="form__row form__row--city">
                                <div class="form__field">
                                    <input class="form__input form__input--text" type="text" name="city" placeholder="City" value="{{ old('city') }}">
                                    
                                    @error('city')
                                        <div class="form__msg form__msg--error">
                                            <i class="form__msg-icon fas fa-exclamation-circle"></i>
                                            <span class="form__msg-txt">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                                                     
                            <div class="form__row form__row--age">
                                <div class="form__field">
                                    <button class="btn btn--primary btn--add" type="submit">
                                        <span class="btn__txt">Add</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection