@extends('dashboard.layouts.main')
@section('title')
    Service
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @php
            $count = 1;
        @endphp
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> Service</h4>
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>
            @endif
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header"> Info</h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>

                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Room</th>
                                <th>Room dimensions</th>
                                <th>Size</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($ser as $item)
                                <tr>
                                    <th>{{ $count++ }}</th>

                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->phone }}
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td></i>
                                        {{ $item->room }}
                                    </td>
                                    <td>
                                        {{ $item->dimensions }}
                                    </td>
                                    <td>
                                        {{ $item->size }}
                                    </td>
                                    <td>
                                        <?php
                                            if($item->status == 0){
                                                ?>
                                        <span class="badge rounded-pill bg-secondary">Pending</span>

                                        <?php
                                            }elseif($item->status == 1){?>
                                        <span class="badge rounded-pill bg-success">Accepted</span>
                                        <?php
                                            }elseif($item->status == 2){?>
                                        <span class="badge rounded-pill bg-danger">regicted</span>
                                        <?php } ?>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{ route('servicecancel', $item->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"><i
                                                            class="bx bx-edit-alt me-1"></i>
                                                        Cancel</button>
                                                </form>
                                                <form action="{{ route('servicepending', $item->id) }}" method="post">
                                                    @csrf
                                                    <button class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>
                                                        Pending</button>
                                                </form>
                                                <form action="{{ route('serviceconfirm', $item->id) }}" method="post">
                                                    @csrf
                                                    <button class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>
                                                        Accept</button>
                                                </form>
                                                

                                                <form action={{ route('service-delete', $item->id) }} method="POST"
                                                    class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <span class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                                        <button
                                                            style="border: none;
                                                             background-color:transparent;margin:0;padding:0;font-weight: 400; 
                                                            color: #697a8d;
                                                            ">
                                                            Delete</button></span>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
    @endsection
