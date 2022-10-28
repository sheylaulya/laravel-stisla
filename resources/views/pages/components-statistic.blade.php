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
                                    <a href="">New Data [+]</a>
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
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
