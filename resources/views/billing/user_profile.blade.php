@extends('layouts.ample')
@section('page_title')
    Профиль пользователя
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg">
                    <img
                        width="100%"
                        alt="user"
                        src="{{ asset('template_style/plugins/images/large/img1.jpg') }}"
                    />
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"
                            ><img
                                    src="{{ asset('template_style/plugins/images/users/varun.jpg') }} "
                                    class="thumb-lg img-circle"
                                    alt="img"
                                /></a>
                            <h4 class="text-white mt-2">Здравствуйте, {!! Auth::user()->name !!}!</h4>
                            <h5 class="text-white mt-2">{{ Auth::user()->email }}</h5>
                        </div>
                        <a href="/avatar" class="text-white">Изменить аватар</a>
                    </div>
                </div>
                <div class="user-btm-box mt-5 d-md-flex">
                    <div class="col text-center">
                        <h1>Ваш ID: {{ Auth::id() }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">ФИО</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="text"
                                    placeholder="Иванов Иван Иванович"
                                    class="form-control p-0 border-0"
                                />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0"
                            >Email</label
                            >
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="email"
                                    placeholder="{{ Auth::user()->email }}"
                                    class="form-control p-0 border-0"
                                    name="example-email"
                                    id="example-email"
                                />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Пароль</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="password"
                                    class="form-control p-0 border-0"
                                />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Номер телефона</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="text"
                                    placeholder="+123 456 7890"
                                    class="form-control p-0 border-0"
                                />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Комментарий</label>
                            <div class="col-md-12 border-bottom p-0">
                        <textarea
                            rows="5"
                            class="form-control p-0 border-0"
                        ></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-sm-12">Выберите страну</label>

                            <div class="col-sm-12 border-bottom">
                                <select
                                    class="
                            form-select
                            shadow-none
                            p-0
                            border-0
                            form-control-line
                          "
                                >
                                    <option>London</option>
                                    <option>India</option>
                                    <option>Usa</option>
                                    <option>Canada</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-danger">Обновить профиль</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection
