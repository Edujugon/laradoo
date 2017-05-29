#   ChangeLog

## V1.0.8

#### Fix

Renamed global functions name to prevent issues when working with other packages.


## V1.0.7

#### Enhancement

Added OdooException in get, update and delete methods.
All those methods depend on another method's result to return a correct value.

## V1.0.6

#### New

The package checks if user has ran `connect` method. if not and it's required to be authenticated, it will do it automatically.


## V1.0.5

#### Change

None method does a pre-validation of access rights before performing the execution. 
Since it will return the error message itself and more accurate.

`fieldsOf` method doesn't accept a second argument anymore. It will return all list directly.
It makes the package more reliable for all different Odoo API versions.


## V1.0.4

#### Fixes

Facade now returns the correct name pointing to Odoo Class.


## V1.0.3

#### Features

Added check when setting host and suffix API url.


## V1.0.2

#### Fixes

fieldsOf method now works with the second arguments.
You can retrieve either all or only those attributes you are interested in. 


## V1.0.1

#### New

##### Update method

Now you can update fields of a model using `update` method.

#### Features

* `version` method accepts a new parameters which is a key to be taken from the collection which was going to be returned.

* Added prevention check in update and delete methods. It's mandatory to use `where` before those methods.