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
                <h1>Release a new Notification.</h1>
                <hr>

                <form action="{{ route('submit-notification')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="notification_title">Notification Title</label>
                        <input type="text" class="form-control" name="notification_title" placeholder="Notification Title" id="notification_title" value="{{ old('notification_title')}}">
                        @error('notification_title') <small class="text-danger">{{ $message}}</small> @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="notification_desc">Notification Description</label>
                        <textarea  class="form-control" row="6" name="notification_desc" placeholder="Notification Description" style="height: 100px" >{{ old('notification_desc')}}</textarea>
                        @error('notification_desc') <small class="text-danger">{{ $message}}</small> @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="duration">Duration (In Seconds)</label>
                        <input id="duration" type="number" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration')}}">
                        @error('duration') <small class="text-danger">{{ $message}}</small> @enderror
                    </div>

                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>