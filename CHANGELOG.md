#   ChangeLog

## V1.0.3

### Features

Added check when setting host and suffix API url.

## V1.0.2

### Fixes

fieldsOf method now works with the second arguments.
You can retrieve either all or only those attributes you are interested in. 

## V1.0.1

### New

#### Update method

Now you can update fields of a model using `update` method.

### Features

* `version` method accepts a new parameters which is a key to be taken from the collection which was going to be returned.

* Added prevention check in update and delete methods. It's mandatory to use `where` before those methods.