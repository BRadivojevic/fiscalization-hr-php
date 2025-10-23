<?php
class Client {
  public function submit(string $signedXml): array {
    // Placeholder: POST to fiscalization endpoint, return ['status'=>'OK','id'=>'...']
    return ['status'=>'OK','id'=>uniqid('fisc_')];
  }
}
