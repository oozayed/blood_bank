<td class="text-center">

<a href="{{route('admin.donations.show',$data->id)}}" class="btn btn-primary">
    show
</a>

    <form style="display: inline" method="POST"
          action="{{route('admin.donations.destroy',$data->id)}}">
        @csrf
        @method('DELETE')
    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
        delete
    </button>

</form>
</td>
