<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

        @endif

    <form wire:submit.prevent="add">

        @if(session()->has('success'))
            <span style="color: Green" class="error">{{ $message }}</span>
        @endif

        <div class="form-group">
            <input wire:model="names" type="text" name="names" id="name2" class="form-control" placeholder="Names">
            @error('names') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input wire:model="email" type="text" name="email" id="email2" class="form-control" placeholder="Email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <input wire:model="phone" type="text" name="phone" id="email2" class="form-control" placeholder="Phone number">
            @error('phone') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <textarea wire:model="comment" class="form-control" name="comment" id="comments2" rows="6" placeholder="Write your comment"></textarea>
            @error('comment') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <button  type="submit" id="submit2" class="btn_1" name="send_comment"> Submit</button>
        </div>
    </form>

</div>
