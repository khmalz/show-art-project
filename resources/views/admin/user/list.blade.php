@extends('dashboard.layouts.main')

@push('styles')
    <link href="{{ asset('assets/admin/vendor/datatables/datatables.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Accounts</h5>
                        <!-- Table with stripped rows -->
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a class="text-white btn btn-info btn-sm"
                                                href="{{ route('admin.user.edit', $user) }}">
                                                <i class='bx bxs-pencil'></i>
                                                Edit
                                            </a>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalDelete1" type="button">
                                                <i class='bx bxs-trash-alt'></i>
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modalDelete1" aria-labelledby="modalDeleteLabel"
                                        aria-hidden="true" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalDeleteLabel">Apakah Kamu Yakin?
                                                    </h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal"
                                                        type="button">Cancel</button>
                                                    <form class="d-inline" action="{{ route('admin.user.destroy', $user) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/vendor/datatables/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/datatables.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $("#dataTable").DataTable({
                "dom": 'Bfrtip',
                "responsive": true,
                "autoWidth": false,
                "buttons": [{
                        extend: "copy",
                        exportOptions: {
                            columns: ":not(:last-child)" // Mengabaikan kolom terakhir
                        }
                    },
                    {
                        extend: "excel",
                        exportOptions: {
                            columns: ":not(:last-child)" // Mengabaikan kolom terakhir
                        }
                    },
                    {
                        extend: "pdf",
                        exportOptions: {
                            columns: ":not(:last-child)" // Mengabaikan kolom terakhir
                        },
                        customize: function(doc) {
                            // Mengatur properti alignment menjadi center untuk seluruh teks dalam tabel
                            doc.content[1].table.body.forEach(function(row) {
                                row.forEach(function(cell) {
                                    cell.alignment = 'center';
                                });
                            });

                            // Mengatur lebar kolom agar semua kolom terlihat dalam satu halaman PDF
                            let colWidth = 100 / doc.content[1].table.body[0].length + '%';

                            doc.content[1].table.widths = Array(doc.content[1].table.body[0].length)
                                .fill(colWidth);

                            // Menambahkan margin ke sisi kiri dan kanan
                            doc.pageMargins = [10, 10, 10, 10];
                        },
                    },
                ],
                "stateSave": true,
                "stateDuration": 60 * 5,
                "language": {
                    "infoEmpty": "No entries to show",
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search...",
                },
                "columnDefs": [{
                    "searchable": false,
                    "orderable": false,
                    "targets": -1,
                }]
            })
        })
    </script>
@endpush
