<tr>
    {{-- <th scope="row">{{ $tasks-></th> --}}
    <td>{{ $task->name }}</td>
    <td>{{ $task->created_by }}</td>
    <td>{{ $task->assigned_to }}</td>
    {{-- <td>{{ $contact->company()->first()->name }}</td> --}}
    <td>{{ $task->status }}</td>
    <td>{{ $task->description }}</td>
    <td width="150">
      <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
      <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
      <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></button>
      </form>
    </td>
</tr>
