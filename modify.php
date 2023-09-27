
<?php
include 'conn.php';
include 'adm.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modify</title>
      
    </head>
    <body>
        <div>
            <form>
                <label>
                    Event's table
                </label><br><br>
                <label>Name</label><input type="text" name="name"/><br>
                <label>Description</label><input type="text" name="descr"/><br>
                <label>Price</label><input type="text" name="price"/><br>
                <label>Image</label><input type="text" name="image"/><br>
                <!-- <button type="submit" name="eu"   class="submit">Update</button> -->
                <button type="submit" name="eventadd"   class="submit">Add</button>
            </form>
        </div>
<br><br><br><br>

        <div>
            <form>
                <label>
                   Conference's table
                </label><br><br>
                <label>Name</label><input type="text" name="name"/><br>
                <label>Description</label><input type="text" name="descr"/><br>
                <label>Price</label><input type="text" name="price"/><br>
                <label>Image</label><input type="text" name="image"/><br>
                <button type="submit" name="cu"   class="submit">Update</button>
                <button type="submit" name="ca"   class="submit">Add</button>
            </form>
        </div>

        <br><br><br><br>
        <div>
            <form>
                <label>
                    Wedding's table
                </label><br><br>
                <label>Name</label><input type="text" name="name"/><br>
                <label>Description</label><input type="text" name="descr"/><br>
                <label>Price</label><input type="text" name="price"/><br>
                <label>Image</label><input type="text" name="image"/><br>
                <button type="submit" name="wu"   class="submit">Update</button>
                <button type="submit" name="wa"   class="submit">Add</button>
            </form>
        </div>
    </body>
</html>