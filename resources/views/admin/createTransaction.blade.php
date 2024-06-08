<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ $pageTitle }}</title> --}}
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container-sm mt-5">
        <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-pencil-square fs-1"></i>
                        <h4>Create Transaction</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="product_id" class="form-label">Product</label>
                            <select class="form-control @error('product_id') is-invalid @enderror" name="product_id"
                                id="product_id">
                                <option value="">Select Product</option>
                                {{-- Loop through products to populate dropdown options --}}
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="user_id" class="form-label">User</label>
                            <select class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                id="user_id">
                                <option value="">Select User</option>
                                {{-- Loop through products to populate dropdown options --}}
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="transaction_date" class="form-label">Transaction Date</label>
                            <input class="form-control @error('transaction_date') is-invalid @enderror" type="date"
                                name="transaction_date" id="transaction_date" value="{{ old('transaction_date') }}">
                            @error('transaction_date')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input class="form-control @error('quantity') is-invalid @enderror" type="text" name="quantity"
                                id="quantity" value="{{ old('quantity') }}" placeholder="Enter Quantity">
                            @error('quantity')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address"
                                id="address" value="{{ old('address') }}" placeholder="Enter Address">
                            @error('address')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="picture" class="form-label">Picture</label>
                            <input class="form-control @error('picture') is-invalid @enderror" type="file" name="picture"
                                id="picture" value="{{ old('picture') }}">
                            @error('picture')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('transactions.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i>Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
