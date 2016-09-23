<?php

class ContentWebController extends ControllerBase
{

    public function showAction($id)
    {
      $content_web = ContentWeb::findFirstByid($id);
      $this->view->content_web = $content_web;
    }

    public function newAction()
    {

    }

    /**
     * Edits a content_web
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $content_web = ContentWeb::findFirstByid($id);
            if (!$content_web) {
                $this->flash->error("content_web was not found");

                $this->dispatcher->forward([
                    'controller' => "content_web",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $content_web->id;
            $this->tag->setDefault("id", $content_web->id);
            $this->tag->setDefault("name_content", $content_web->name_content);
            $this->tag->setDefault("decription_content", $content_web->decription_content);
            $this->tag->setDefault("category_content", $content_web->category_content);
            $this->tag->setDefault("date_content", $content_web->date_content);
            $this->tag->setDefault("title_content", $content_web->title_content);
            $this->tag->setDefault("summary_content", $content_web->summary_content);
            $this->view->image_content = $content_web->image_content;

        }
    }
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'index'
            ]);

            return;
        }

        $content_web = new ContentWeb();
        $content_web->name_content = $this->request->getPost("name_content");
        $content = $this->request->getPost("decription_content");
        $dom = new DOMDocument;
        $dom->loadHTML($content);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $image) {
                $src = $image->getAttribute('src');
                $data = str_replace('data:image/jpeg;base64,', '', $src);
                $data = str_replace(' ', '+', $data);
                $data = base64_decode($data);
                $mimetype = "jpeg";
                $filepath = 'img/'. uniqid() .'.'. $mimetype;
                $new_src = '/'.$filepath;
                $image->removeAttribute('src');
                $image->setAttribute('src', $new_src);
                $success = file_put_contents($filepath, $data);
            }
        $str = $dom->saveHTML();
        $content_web->decription_content = $str;
        $content_web->category_content = $this->request->getPost("category_content");
        $content_web->date_content = $this->request->getPost("date_content");

        if ($this->request->hasFiles() == true) {
            $baseLocation = 'img/';
            foreach ($this->request->getUploadedFiles() as $file){
                $data = $file->getKey();
                $dataError = $file->getError();
                if($data != "files"){
                    if ($dataError == 0){
                        $fileName= rand(0,100000). date('Ymdhis').".".$file->getExtension();
                        $file->moveTo($baseLocation . $fileName);
                        $content_web->image_content = $fileName;
                    }
                }
            }

        } else {
            echo 'File not uploaded';
        }
        $content_web->title_content = $this->request->getPost("title_content");
        $content_web->summary_content = $this->request->getPost("summary_content");

        if (!$content_web->save()) {
            foreach ($content_web->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'new'
            ]);

            return;
        }
         $this->flash->success("content_web was Insert successfully");
        $this->response->redirect('/index');
    }

    /**
     * Saves a content_web edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $content_web = ContentWeb::findFirstByid($id);
        if (!$content_web) {
            $this->flash->error("content_web does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'index'
            ]);

            return;
        }

        $content_web->name_content = $this->request->getPost("name_content");
        $content = $this->request->getPost("decription_content");
        $dom = new DOMDocument;
        $dom->loadHTML($content);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $image) {
                $src = $image->getAttribute('src');
                $srcNew[] = $src;
                if (stripos($src, "data:image/jpeg;base64") !== False){
                    $data = str_replace('data:image/jpeg;base64,', '', $src);
                    $data = str_replace(' ', '+', $data);
                    $data = base64_decode($data);
                    $mimetype = "jpeg";
                    $filepath = 'img/'. uniqid() .'.'. $mimetype;
                    $new_src = '/'.$filepath;
                    $image->removeAttribute('src');
                    $image->setAttribute('src', $new_src);
                    $success = file_put_contents($filepath, $data);
                }
            }
        $str = $dom->saveHTML();
        $content_web->decription_content = $str;
        $content_web->category_content = $this->request->getPost("category_content");
        $content_web->date_content = $this->request->getPost("date_content");
        if ($this->request->hasFiles() == true) {
            $baseLocation = 'img/';
            foreach ($this->request->getUploadedFiles() as $file){
                $data = $file->getKey();
                $dataError = $file->getError();
                if($data != "files"){
                    if ($dataError == 0){
                        unlink('img/'.$content_web->name_image);
                        $fileName= rand(0,100000). date('Ymdhis').".".$file->getExtension();
                        $file->moveTo($baseLocation . $fileName);
                        $content_web->image_content = $fileName;
                    }
                }
            }

        } else {
            echo 'File not uploaded';
        }
        $content_web->title_content = $this->request->getPost("title_content");
        $content_web->summary_content = $this->request->getPost("summary_content");

        if (!$content_web->save()) {

            foreach ($content_web->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'edit',
                'params' => [$content_web->id]
            ]);

            return;
        }
        $this->flash->success("content_web was Edit successfully");
        $this->response->redirect('/index');
    }

    /**
     * Deletes a content_web
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $content_web = ContentWeb::findFirstByid($id);
        if (!$content_web) {
            $this->flash->error("content_web was not found");

            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'index'
            ]);

            return;
        }

        if (!$content_web->delete()) {

            foreach ($content_web->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "content_web",
                'action' => 'search'
            ]);

            return;
        }

        $content = $content_web->decription_content;
        $dom = new DOMDocument;
        $dom->loadHTML($content);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $image) {
                $src = $image->getAttribute('src');
                $delete = ltrim($src, '/img/');
                unlink('img/'.$delete);
            }
        $image_content = $content_web->image_content;
        unlink('img/'.$image_content);
        $this->flash->success("content_web was deleted successfully");
        $this->response->redirect('/');
    }

}

