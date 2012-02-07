<?php

function getJavascripts() {
    $response = sfContext::getInstance()->getResponse()->addJavascript('/js/mask_funcs');
}
/*
 * @param  string field name 
 * @param  string selected field value
 * @param  array  additional HTML compliant <input> tag parameters
 * @return string XHTML compliant <input> tag with type="text" for with mask for CPF's
 */
function input_cpfmask_tag($name, $value = null, $options = array())
{
  getJavascripts();
  $options["maxlength"] = "14";
  $options["onBlur"] = "mascara(this,cpf)";
  $options["onKeyPress"] = "mascara(this,cpf)";
  $options["onPaste"] = "mascara(this,cpf)";
  $options["autocomplete"] = "off";
  return input_tag($name , $value, $options);
}

/*
 * @param  string field name 
 * @param  string selected field value
 * @param  array  additional HTML compliant <input> tag parameters
 * @return string XHTML compliant <input> tag with type="text" for with mask for CEP's
 */
function input_cepmask_tag($name, $value = null, $options = array())
{
  getJavascripts();
  $options["maxlength"] = "9";
  $options["onBlur"] = "mascara(this,cep)";
  $options["onKeyPress"] = "mascara(this,cep)";
  $options["onPaste"] = "mascara(this,cep)";
  $options["autocomplete"] = "off";
  return input_tag($name , $value, $options);
}

/*
 * @param  string field name 
 * @param  string selected field value
 * @param  array  additional HTML compliant <input> tag parameters
 * @return string XHTML compliant <input> tag with type="text" for with mask for CNPJ's
 */
function input_cnpjmask_tag($name, $value = null, $options = array())
{
  getJavascripts();
  $options["maxlength"] = "18";
  $options["onBlur"] = "mascara(this,cnpj)";
  $options["onKeyPress"] = "mascara(this,cnpj)";
  $options["onPaste"] = "mascara(this,cnpj)";
  $options["autocomplete"] = "off";
  return input_tag($name , $value, $options);
}

/*
 * @param  string field name 
 * @param  string selected field value
 * @param  array  additional HTML compliant <input> tag parameters
 * @return string XHTML compliant <input> tag with type="text" for with mask for TELEFONE's
 */
function input_telefonemask_tag($name, $value = null, $options = array())
{
  getJavascripts();
  $options["maxlength"] = "14";
  $options["onBlur"] = "mascara(this,telefone)";
  $options["onKeyPress"] = "mascara(this,telefone)";
  $options["onPaste"] = "mascara(this,telefone)";
  $options["autocomplete"] = "off";
  return input_tag($name , $value, $options);
}

/*
 * @param  string field name 
 * @param  string selected field value
 * @param  array  additional HTML compliant <input> tag parameters
 * @return string XHTML compliant <input> tag with type="text" for numbers, only
 */
function input_numeromask_tag($name, $value = null, $options = array())
{
  getJavascripts();
  $options["onBlur"] = "mascara(this,soNumeros)";
  $options["onKeyPress"] = "mascara(this,soNumeros)";
  $options["onPaste"] = "mascara(this,soNumeros)";
  $options["autocomplete"] = "off";
  return input_tag($name , $value, $options);
}