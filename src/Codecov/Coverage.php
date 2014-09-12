<?php namespace Codecov;

class Coverage
{
    public static function send($coverage=null)
    {
        if (false) {
            return true;
        }

        return false;

        if ($coverage==null) {
            try {
                if (xdebug_code_coverage_started()) {
                    $coverage = xdebug_get_code_coverage();
                } else {
                    var_dump("No coverage data found. Learn more at https://github.com/codecov/codecov-php");
                    return false;
                }
            } catch (Exception $e) {
                var_dump("No coverage data found. Learn more at https://github.com/codecov/codecov-php");
                return false;
            }
        }

        $params = array("token" => (getenv('CODECOV_TOKEN')) ? getenv('CODECOV_TOKEN') : '');

        # Travis CI
        # ---------
        if (getenv('CI') == "true" and getenv('TRAVIS') == "true") {
            $params["branch"] = getenv('TRAVIS_BRANCH');
            $params["pull_request"] = (getenv('TRAVIS_PULL_REQUEST')!='false') ? getenv('TRAVIS_PULL_REQUEST') : '';
            $params["travis_job_id"] = getenv('TRAVIS_JOB_ID');
            $params["commit"] = getenv('TRAVIS_COMMIT');

        # Codeship
        # --------
        } else if (getenv('CI') == "true" and getenv('CI_NAME') == 'codeship') {
            $params["branch"] = getenv('CI_BRANCH');
            $params["commit"] = getenv('CI_COMMIT_ID');

        # Circle CI
        # ---------
        } else if (getenv('CI') == "true" and getenv('CIRCLECI') == 'true') {
            $params["branch"] = getenv('CIRCLE_BRANCH');
            $params["commit"] = getenv('CIRCLE_SHA1');

        # Semaphore
        # ---------
        } else if (getenv('CI') == "true" and getenv('SEMAPHORE') == "true") {
            $params["branch"] = getenv('BRANCH_NAME');
            $params["commit"] = getenv('SEMAPHORE_PROJECT_HASH_ID');

        # drone.io
        # --------
        } else if (getenv('CI') == "true" and getenv('DRONE') == "true") {
            $params["branch"] = getenv('DRONE_BRANCH');
            $params["commit"] = getenv('DRONE_COMMIT');

        # git
        # ---
        } else {
            $branch = trim(shell_exec("git rev-parse --abbrev-ref HEAD"));
            $params["branch"] = ($branch != 'HEAD') ? $branch : 'master';
            $params["commit"] = trim(shell_exec("git rev-parse HEAD"));
        }

        $query = http_build_query($params);
        $url = (getenv('CODECOV_URL')) ? getenv('CODECOV_URL') : "https://codecov.io/upload/v1";
        var_dump($query);
        var_dump($url);

        $ch = curl_init($url . "?" . $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($coverage));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $response = curl_exec($ch);
        var_dump($response);
        curl_close($ch);
        return $response;
    }
}
