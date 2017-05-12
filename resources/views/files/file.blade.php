<tr>
    <td><span class="text-overflow">{{ $file->name }}</span></td>
    <td>{{ $file->description }}</td>
    <td>{{ $file->created_at->toFormattedDateString() }}</td>
    <td class="text-right"><a href="{{ Storage::url(auth()->user()->unique_id . '/' . $file->file_id) }}"><span class="glyphicon glyphicon-save" aria-hidden="true"></span></a></td>
</tr>
