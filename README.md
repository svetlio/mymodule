# mymodule

Example module using custom form passing params to views in own controller.
Or add the form through hook_preprocess_views_view.

Views need to have exposed filters named as form items in the custom form; Exposed form in block:Yes.

Form should be redirected on submit to the controller route passing the values as query params (?param_name=value&param_name2=value2). 

For multi select or checkboxes the params are in format: param_name[6]=6&param_name[17]=17

Views automatically read these params.
