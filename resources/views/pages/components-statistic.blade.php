@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table Siswa</h1>
            </div>
            
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>
                                <button id="modal-1" type="button" class="btn btn-primary">Add Students</button>
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Profile</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Class</th>
                                            <th>Birthday</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                1
                                            </td>
                                            <td>
                                                <img alt="image"
                                                    src="{{ asset('img/avatar/avatar-5.png') }}"
                                                    class="rounded-circle"
                                                    width="35"
                                                    data-toggle="tooltip"
                                                    title="Wildan Ahdian">
                                            </td>
                                            <td>Sheyla</td>
                                            <td>Aulya</td>
                                            <td>
                                              XI PPLG 2
                                            </td>
                                            <td>
                                            2006-03-24
                                            </td>
                                            <td><a href="#"
                                                    class="btn btn-secondary">Detail</a></td>
                                        </tr>

                                        <tr>
                                            <td class="p-0 text-center">
                                                1
                                            </td>
                                            <td>
                                                <img alt="image"
                                                    src="{{ asset('img/avatar/avatar-4.png') }}"
                                                    class="rounded-circle"
                                                    width="35"
                                                    data-toggle="tooltip"
                                                    title="Wildan Ahdian">
                                            </td>
                                            <td>Siti</td>
                                            <td>Nurul</td>
                                            <td>
                                              XI PPLG 2
                                            </td>
                                            <td>
                                            2006-08-24
                                            </td>
                                            <td><a href="#"
                                                    class="btn btn-secondary">Detail</a></td>
                                        </tr>

                                        <tr>
                                            <td class="p-0 text-center">
                                                3
                                            </td>
                                            <td>
                                                <img alt="image"
                                                    src="{{ asset('img/avatar/avatar-1.png') }}"
                                                    class="rounded-circle"
                                                    width="35"
                                                    data-toggle="tooltip"
                                                    title="Rizal Fakhri">
                                            </td>
                                            <td>Kiagus</td>
                                            <td>Ahmad</td>
                                            <td>
                                              XI PPLG 2
                                            </td>
                                            <td>
                                            2006-02-09
                                            </td>
                                            <td><a href="#"
                                                    class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="section-body">
            </div>

        </section>
    </div>

    
    <form class="modal-part"
            id="modal-add-part">
            <div class="form-group">
                <label>First Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="NISN"
                        name="email">
                </div>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Full Name"
                        name="password">
                </div>
            </div>
           
            <div class="form-group">
                <label>GENDER</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-venus-mars"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Gender"
                        name="password">
                </div>
            </div>
            <div class="form-group">
                <label>Class</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Full Name"
                        name="password">
                </div>
            </div>
            <div class="form-group">
                <label>DATE OF BIRTH</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-cake-candles"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="DATE OF BIRTH"
                        name="password">
                </div>
            </div>
        </form>
@endsection

@push('scripts')
  <!-- JS Libraies -->
<script src="{{ asset('library/prismjs/prism.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>

@endpush
