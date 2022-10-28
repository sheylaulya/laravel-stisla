@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table Kelas</h1>
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
                                            <th>Class</th>
                                            <th>Student</th>
                                            <th>Male</th>
                                            <th>Female</th>
                                            <th>Major</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                1
                                            </td>
                                            <td>
                                                XI PPLG 2
                                            </td>
                                            <td>39</td>
                                            <td>31</td>
                                            <td> 8 
                                            </td>
                                            <td>
                                                PPLG
                                            </td>
                                            <td><a href="#"
                                                    class="btn btn-secondary">Detail</a></td>
                                        </tr>


                                        <tr>
                                            <td class="p-0 text-center">
                                                1
                                            </td>
                                            <td>
                                                XI BRC 
                                            </td>
                                            <td>32</td>
                                            <td>12</td>
                                            <td> 20 
                                            </td>
                                            <td>
                                                BRC
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
