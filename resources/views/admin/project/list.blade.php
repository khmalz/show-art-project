@extends('dashboard.layouts.main')

@push('styles')
    <link href="{{ asset('assets/admin/vendor/datatables/datatables.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="pagetitle">
        <h1>Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List Project</h5>
                        <!-- Table with stripped rows -->
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Tag</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td class="text-capitalize">
                                            {{ strlen($project->title) > 30 ? substr($project->title, 0, 30) . '...' : $project->title }}
                                        </td>
                                        <td>{{ $project->developer->name }}</td>
                                        <td>
                                            @foreach ($project->tags->take(3) as $index => $tag)
                                                <span class="badge text-bg-primary">{{ $tag->name }}</span>
                                                @if ($index == 2 && count($project->tags) > 3)
                                                    <span class="badge text-bg-primary">lainnya..</span>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $project->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm text-white"
                                                href="{{ route('admin.project.show', $project) }}">
                                                <i class='bx bxs-info-circle'></i>
                                                Show
                                            </a>
                                        </td>
                                    </tr>
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
