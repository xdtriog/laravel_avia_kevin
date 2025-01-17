<!DOCTYPE html>  
<html>  
<head>  
    <title>Laporan Pembelian</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <!-- DataTables CSS -->  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">  
</head>  
<body>  
    <div class="container mt-5">  
        <h1>Laporan Total Pembelian per Customer</h1>  
        <table class="table table-striped" id="reportTable">  
            <thead>  
                <tr>  
                    <th>ID</th>  
                    <th>Nama</th>  
                    <th>Email</th>  
                    <th>Telepon</th>  
                    <th>Alamat</th>  
                    <th>Total Pembelian</th>  
                </tr>  
            </thead>  
            <tbody></tbody>  
        </table>  
    </div>  

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>  
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>  
    <script>  
      $(document).ready(function() {  
          $('#reportTable').DataTable({  
              processing: true,  
              serverSide: true,  
            ajax: "{{ route('report.data') }}",
              columns: [  
                  { data: 'CUSTOMER_ID', name: 'CUSTOMER_ID' },  
                  { data: 'CUSTOMER_NAME', name: 'CUSTOMER_NAME' },  
                  { data: 'CUSTOMER_EMAIL', name: 'CUSTOMER_EMAIL' },  
                  { data: 'CUSTOMER_PHONE', name: 'CUSTOMER_PHONE' },  
                  { data: 'CUSTOMER_ADDRESS', name: 'CUSTOMER_ADDRESS' },  
                  { data: 'total_belanja', name: 'total_belanja' }  
              ]  
          });  
      });  
    </script>  
</body>  
</html>