#   ChangeLog

## V1.0.1

### New

#### Update method

Now you can update fields of a model using `update` method.

### Features

* `version` method accepts a new parameters which is a key to be taken from the collection which was going to be returned.

* Added prevention check in update and delete methods. It's mandatory to use `where` before those methods.