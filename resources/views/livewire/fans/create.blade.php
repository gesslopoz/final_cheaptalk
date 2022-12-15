<div>
    <div class="card border border-light">
        <div class="card-header bg-primary">
            <h3 class="mt-2 text-white">Add Fan</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="age">
                <label for="age">Age</label>
                @error('age')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Address</label>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
            <select name="idol_name" class="form-select" wire:model.defer="idol_name">
                <option hidden="true">Select Idol Name</option>
                <option selected disabled>Select Idolname</option>
                <option value="KIMTAEHYUNG">Kim Taehyung</option>
                <option value="CHANYEOL">Chanyeol</option>
                <option value="TAEHYUN">Taehyun</option>
                <option value="LALISA">Lalisa</option>
            </select>
                <label for="idol_name">Idol Name</label>
                @error('idol_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="group_name" class="form-select" wire:model.defer="group_name">
                <option hidden="true">Select Group Name</option>
                <option selected disabled>Select Groupname</option>
                <option value="BTS">BTS</option>
                <option value="EXO">EXO</option>
                <option value="TXT">TXT</option>
                <option value="BLACKPINK">BLACKPINK</option>
            </select>
            <label for="group_name">Group Name</label>
            @error('group_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
               
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addFan()">
                    Add Fan
                </button>
            </div>
        </div>
    </div>
</div>
