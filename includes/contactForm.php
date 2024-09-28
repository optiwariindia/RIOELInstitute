<div class="card">
    <div class="card-header">
        <div class="card-title">Contact Form</div>
    </div>
    <div class="card-body">
        <form action="/index.php" class="row" method="post">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" required pattern="^[a-z A-Z]+$" id="name" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">E Mail</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" required placeholder="+91 98765 43210" pattern="^[\+0-9 ]+$" type="tel" id="phone" class="form-control">
                </div>
            </div>
            <button>jdklasfj</button>
        </form>
    </div>
</div>