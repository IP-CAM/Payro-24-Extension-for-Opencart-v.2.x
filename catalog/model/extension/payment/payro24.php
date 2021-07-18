<?php 

class ModelExtensionPaymentpayro24 extends Model
{
	public function getMethod($address)
	{
		$this->load->language('extension/payment/payro24');

		if ($this->config->get('payro24_status')) {

			$status = true;

		} else {

			$status = false;
		}

		$method_data = array ();

		if ($status) {

			$method_data = array (
        		'code'       => 'payro24',
        		'title'      => $this->language->get('text_title'),
				'terms'      => null,
				'sort_order' => $this->config->get('payro24_sort_order')
			);
		}

		return $method_data;
	}
}
