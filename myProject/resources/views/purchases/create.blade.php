<!DOCTYPE html>  
<html>  
<head>  
    <title>Input Transaksi</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
</head>  
<body>  
    <div class="container mt-5">  
        <h1>Input Transaksi</h1>  
        @if (session('success'))  
            <div class="alert alert-success">{{ session('success') }}</div>  
        @endif  

        <form action="{{ route('purchases.store') }}" method="POST">  
            @csrf  
            <div class="mb-3">  
                <label for="CUSTOMER_ID" class="form-label">Pilih Customer</label>  
                <select name="CUSTOMER_ID" id="CUSTOMER_ID" class="form-select" required>  
                    <option value="">-- Pilih Customer --</option>  
                    @foreach($customers as $cust)  
                        <option value="{{ $cust->CUSTOMER_ID }}">{{ $cust->CUSTOMER_NAME }}</option>  
                    @endforeach  
                </select>  
            </div>  
            <div class="mb-3">  
                <label for="PURCHASE_DATE" class="form-label">Tanggal</label>  
                <input type="date" name="PURCHASE_DATE" id="PURCHASE_DATE" class="form-control" required>  
            </div>  
            <div class="mb-3">  
                <label for="TOTAL_PRICE" class="form-label">Total Harga</label>  
                <input type="number" name="TOTAL_PRICE" id="TOTAL_PRICE" class="form-control" required>  
            </div>  
            <button type="submit" class="btn btn-primary">Simpan</button>  
        </form>  
    </div>  
</body>  
</html>