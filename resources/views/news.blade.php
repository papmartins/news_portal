
<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>New</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $new)
                <tr>
                    <td>{{$new->title}}</td>
                    <td>{{$new->new}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>