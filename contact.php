<html>
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .modal-content {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            padding: 20px;
            box-sizing: border-box;
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .modal-header h2 {
            margin: 0;
            font-size: 24px;
        }
        .modal-header .close {
            font-size: 24px;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group label .required {
            color: red;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #ced4da;
        }
        .form-group .error {
            color: red;
            font-size: 12px;
        }
        .modal-footer {
            display: flex;
            justify-content: flex-end;
        }
        .modal-footer button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Contact</h2>
                <span class="close">&times;</span>
            </div>
            <div class="form-group">
                <label for="nama-penerima">Nama Penerima <span class="required">*</span> <span class="error">Wajib diisi</span></label>
                <select id="nama-penerima">
                    <option>-- Pilih Penerima --</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul-pesan">Judul Pesan <span class="required">*</span> <span class="error">Wajib diisi</span></label>
                <input type="text" id="judul-pesan" placeholder="Masukan Judul Pesan">
            </div>
            <div class="form-group">
                <label for="isi-pesan">Isi Pesan <span class="required">*</span> <span class="error">Wajib diisi</span></label>
                <textarea id="isi-pesan" rows="5"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button">Kirim</button>
            </div>
        </div>
    </div>
</body>
</html>