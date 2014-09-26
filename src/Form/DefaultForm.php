<?php

/**
 * @file
 * Contains Drupal\acme\Form\DefaultForm.
 */

namespace Drupal\acme\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class DefaultForm extends ConfigFormBase
{

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('acme.default_form_config');

    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('first_name'),
    ];

    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('last_name'),
    ];

    $form['dob'] = [
      '#type' => 'date',
      '#title' => $this->t('DOB'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('dob'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    return parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('acme.default_form_config')
          ->set('first_name', $form_state->getValue('first_name'))
          ->set('last_name', $form_state->getValue('last_name'))
          ->set('dob', $form_state->getValue('dob'))
        ->save();
  }
}
