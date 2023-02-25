<h1>Post Listing</h1>
<ol>
    @foreach($data as $item)
    <li>
        {{$item['title']}}
        <p>
            {{$item['body']}}
        </p>
    </li>

    @endforeach
</ol>