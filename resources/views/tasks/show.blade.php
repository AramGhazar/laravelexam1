<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Task Details</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Task Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" id="name" value="{{ $task->name }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="created_by" class="col-md-3 col-form-label">Created by</label>
                    <div class="col-md-9">
                        <input type="text" name="created_by" id="created_by" value="{{ $task->created_by }}" class="form-control @error('created_by') is-invalid @enderror">
                        @error('created_by')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="assigned_to" class="col-md-3 col-form-label">Assigned To</label>
                    <div class="col-md-9">
                        <input type="text" name="assigned_to" id="assigned_to" value="{{ $task->assigned_to }}" class="form-control @error('assigned_to') is-invalid @enderror">
                        @error('assigned_to')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="status" class="col-md-3 col-form-label">Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name="status">
                            <option selected=""> Select task status</option>
                            <option value="created">Created</option>
                            <option value="assigned">Assigned</option>
                            <option value="in_progress">In-progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                        <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ $task->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-outline-danger">Delete</a>
                        <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
