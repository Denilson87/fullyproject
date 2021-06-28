<?php
require_once APPPATH . 'core/Admin_controller.php';

class Media extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('media_model');
	}

	function index(){
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['titulo'] = 'Media';
		$this->mTela('media/media',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Media';
		$this->mTela('Media/add',$dados);
	}

	function save(){
		$this->media_model->save();
		redirect(admin_url('media'));
	}

	function modal_save(){
		if(isset($_FILES["media_image"]["name"]))
		{
			$image_path = realpath(APPPATH . '../media/img');
			$config['upload_path'] = $image_path;
			//$config['encrypt_name'] = TRUE;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
//			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('media_image'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				//$data = $this->upload->data();
				$data = array('upload_data' => $this->upload->data());
				$title= $data['upload_data']['file_name'];
//				$id_slider= $this->input->post('id_slider');
				$image= 'img/'.$data['upload_data']['file_name'];

				$result= $this->media_model->save_modal($title,$image);

				echo $result['id_media'].'#'.$result['foto'];

				//echo '<img src="'.base_url().'media/img/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
			}
		}

	}

	function ajax_upload()
	{
		if(isset($_FILES["image_file"]["name"]))
		{
			$image_path = realpath(APPPATH . '../media/img');
			$config['upload_path'] = $image_path;
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
//			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			var_dump($this->upload->do_upload('image_file'));
			if(!$this->upload->do_upload('image_file'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				echo '<img src="'.base_url().'media/img/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
			}
		}
	}

	function ver($id){
		$dados['media'] = $this->media_model->getById($id);
		$dados['titulo'] = 'Media';
		$this->mTela('media/ver',$dados);
	}

	function alterar($id){
		$dados['media'] = $this->media_model->getById($id);
		$dados['titulo'] = 'Alterar Media';
		$this->mTela('media/alterar',$dados);
	}

	function update($id){
		$this->media_model->update($id);
		redirect(admin_url('media'));
	}

	function delete($id){
		$this->media_model->delete($id);
		redirect(admin_url('media'));
	}
}
