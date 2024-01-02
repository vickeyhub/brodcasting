<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <title>Dashboard</title>
</head>
<body>
    <x-AdminNavbar type="admin"/>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <h1>All Notification Alerts</h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th><i class="bi bi-clock"></i> Duration</th>
                            <th><i class="bi bi-calendar-week"></i> Creation Date</th>
                            <th><i class="bi bi-calendar-week"></i> last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alerts as $alert)
                        <tr>
                            <td>{{ $alert->id }}.</td>
                            <td>{{ $alert->title }}</td>
                            <td>{{ $alert->description }}</td>
                            <td>{{ $alert->duration }} seconds</td>
                            <td>
                                <p class="mb-0">{{ date('d F, Y', strtotime($alert->created_at)) }}</p>
                                <small class="fw-bold"><i class="bi bi-clock"></i> {{ date('h:i A', strtotime($alert->created_at)) }}</small>
                            </td>
                            <td>
                                <p class="mb-0">{{ date('d F, Y', strtotime($alert->updated_at)) }}</p>
                                <small class="fw-bold"><i class="bi bi-clock"></i> {{ date('h:i A', strtotime($alert->updated_at)) }}</small>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $alerts->links()}}
                
            </div>
        </div>
    </div>
</body>
</html>