<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">List products</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <!-- Data -->
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        List categories
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category name</th>
              <th>Product name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Status</th>
              <th>Description</th>
              <th>Date create</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Smartphone</td>
              <td>Iphone</td>
              <td><img src="" alt="anh..."></td>
              <td>$1999</td>
              <td>Show</td>
              <td>Iphone new generation</td>
              <td>23/11/2023</td>
              <td>
                <a href="?act=updateProduct" class="btn btn-warning">Update</a>
                <a href="?act=deleteProduct" class="btn btn-danger">Delete</a>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Smartphone</td>
              <td>Iphone 1</td>
              <td><img src="" alt="anh..."></td>
              <td>$19994</td>
              <td>Hidden</td>
              <td>Iphone new generation</td>
              <td>23/11/2023</td>
              <td>
                <a href="?act=updateProduct" class="btn btn-warning">Update</a>
                <a href="?act=deleteProduct" class="btn btn-danger">Delete</a>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>Smartphone</td>
              <td>Iphone</td>
              <td><img src="" alt="anh..."></td>
              <td>$1999</td>
              <td>Show</td>
              <td>Iphone new generation</td>
              <td>23/11/2023</td>
              <td>
                <a href="?act=updateProduct" class="btn btn-warning">Update</a>
                <a href="?act=deleteProduct" class="btn btn-danger">Delete</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>