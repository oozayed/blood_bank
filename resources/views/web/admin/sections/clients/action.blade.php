<td class="text-center">
    @if ($data->status == 1)
        <a href="{{route('admin.clients.status',$data->id)}}" class="btn btn-warning">DeActivate</a>
    @else
        <a href="{{route('admin.clients.status',$data->id)}}" class="btn btn-success">Activate</a>
    @endif

<form style="display: inline" method="POST"
      action="{{route('admin.clients.destroy',$data->id)}}">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
        delete
    </button>

</form>
</td>
