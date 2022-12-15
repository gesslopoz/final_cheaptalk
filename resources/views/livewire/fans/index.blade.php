<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select class="form-select" wire:model.lazy ="group_name">
                    <option value="all">All</option>
                    <option value="BTS">BTS</option>
                    <option value="EXO">EXO</option>
                    <option value="TXT">TXT</option>
                    <option value="BLACKPINK">BLACKPINK</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" wire:model.lazy ="idol_name">
                    <option value="all">All</option>
                    <option value="KIMTAEHYUNG">Kim Taehyung</option>
                    <option value="CHANYEOL">Chanyeol</option>
                    <option value="TAEHYUN">Taehyun</option>
                    <option value="LALISA">Lalisa</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy ="search">
            </div>
        </div>
    </div>
    <table class="table table-striped shadow border border-light m-3">
        <thead class="bg-primary">
            <tr class="text-white">
                <th>ID No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Idol Name</th>
                <th>Group Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fans as $fan)
                <tr>
                    <td class="text-gray"><b>{{ $fan->id }}</b></td>
                    <td class="text-gray"><b>{{ $fan->name }}</b></td>
                    <td class="text-gray"><b>{{ $fan->age }}</b></td>
                    <td class="text-light green"><b>{{ $fan->address }}</b></td>
                    <td class="text-light green"><b>{{ $fan->idol_name }}</b></td>
                    <td class="text-light green"><b>{{ $fan->group_name }}</b></td>
                    <td>
                        <a href="{{ url('edit', ['fan' => $fan->id]) }}" class="btn btn-info" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['fan' => $fan->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$fans->links()}}
</div>

<style>
    body{
        background-image: url('images/idol.jpg');
        background-repeat: repeat;
        bacground-size: cover;
        background-position: cover;
        height: 100%;
    }
</style>
