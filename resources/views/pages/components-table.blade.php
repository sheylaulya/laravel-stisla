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
                            <button id="modal-1" type="button" class="btn btn-primary">Add Class</button>
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
                                                2
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

    
    <form class="modal-part"
            id="modal-add-part">
            <div class="form-group">
                <label>Class</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="Class"
                        name="email">
                </div>
            </div>
            <div class="form-group">
                <label>Student</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Student"
                        name="password">
                </div>
            </div>
            <div class="form-group">
                <label>Male</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-venus-mars"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Count Number"
                        name="password">
                </div>
            </div>
            <div class="form-group">
                <label>Female</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-venus-mars"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Count Number"
                        name="password">
                </div>
            </div>
            <div class="form-group">
                <label>Major</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="password"
                        class="form-control"
                        placeholder="Major"
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
