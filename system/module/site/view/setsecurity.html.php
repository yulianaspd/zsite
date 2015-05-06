<?php
/**
 * The setbasic view file of site module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      xiying Guang <guanxiying@xirangit.com>
 * @package     site
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php js::set('position', $position)?>
<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-globe'></i> <?php echo $lang->site->setSecurity;?></strong></div>
  <div class='panel-body'>
    <form method='post' id='ajaxForm' class='form-inline'>
      <table class='table table-form'>
        <tr>
          <th class='w-200px'><?php echo $lang->site->captcha;?></th>
          <td colspan='2'><?php echo html::radio('captcha', $lang->site->captchaList, isset($this->config->site->captcha) ? $this->config->site->captcha : 'auto');?></td>
          <td></td>
        </tr>
        <tr>
          <th class='w-200px'><?php echo $lang->site->checkPosition;?></th>
          <td colspan='2'><?php echo html::radio('checkPosition', $lang->site->checkPositionList, isset($this->config->site->checkPosition) ? $this->config->site->checkPosition : 'close');?></td>
          <td></td>
        </tr>
        <tr>
          <?php $allowedPosition = isset($this->config->site->allowedPosition) ? $this->config->site->allowedPosition : '';?>
          <th class='w-200px'><?php echo $lang->site->allowedPosition;?></th>
          <td colspan='2'><?php echo html::input('allowedPositionShow', $allowedPosition, "class='form-control' disabled='disabled'");?></td>
          <td>
            <?php echo html::input('allowedPosition', $allowedPosition, "class='hide'");?>
            <?php echo $allowedPosition == $position ? '' : html::a('', $lang->site->usePosition, "id='usePosition' class='red'")?>
          </td>
        </tr>
        <tr>
          <th class='w-200px'><?php echo $lang->site->checkIP;?></th>
          <td colspan='2'><?php echo html::radio('checkIP', $lang->site->checkIPList, isset($this->config->site->checkIP) ? $this->config->site->checkIP : 'close');?></td>
          <td></td>
        </tr>
        <tr>
          <th class='w-200px'><?php echo $lang->site->allowedIP;?></th>
          <td colspan='2'><?php echo html::input('allowedIP', isset($this->config->site->allowedIP) ? $this->config->site->allowedIP : '', "class='form-control' placeholder='{$lang->site->allowedIPTip}'");?></td>
          <td title="<?php echo $lang->site->allowedIPTip;?>"><i class='icon icon-question-sign'></i></td>
        </tr>
        <tr>
          <th></th>
          <td colspan='2'>
            <?php echo html::submitButton();?>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php include '../../common/view/footer.admin.html.php';?>