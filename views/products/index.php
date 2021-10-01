<h1>Product list</h1>

<p>
      <a href="/products/create" class='btn btn-success'>Create New Product</a>
    </p>

    <form>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for products ..." name="search" id='search'
          value="<?php echo $search; ?>">

        <a href='/'>
          <button class="btn btn-outline-secondary" type="button" id='resetSearch'>
            <i class="bi bi-backspace-fill"></i>
          </button>
        </a>

        <button class="btn btn-outline-secondary" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">PID</th>
          <th scope="col">Image</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Create Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $i => $product): ?>
              <tr>
                <th scope="row"><?php echo $i+1 ?></th>
                <td><?php echo $product['id'] ?></td>
                <td>
                  <?php if($product['image']): ?>
                    <img src="<?php echo $product['image'] ?>" alt="" class='thumb-image'>
                  <?php endif ?>
                </td>
                <td><?php echo $product['title'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $product['create_date'] ?></td>
                <td>
                  <a href="/products/update?id=<?php echo $product['id']?>" type="button" class="btn btn-sm btn-outline-primary">Edit</a>
                  <form style="display:inline-block" action="/products/delete" method="post">
                    <input type="hidden" name="id" value="<?php echo $product['id']?>">
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                  </form>
                </td>
            </tr>
            <?php endforeach; ?>
      </tbody>
    </table>
    <script>
      let resetSearch = document.getElementById('resetSearch');
      let search = document.getElementById('search');

      resetSearch.addEventListener("click", function () {
        search.value = '';
        <?php header('url=index.php') ?>
        })
    </script>